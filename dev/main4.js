let $ = a => document.getElementById(a), lb = $('lb'), search = $('search__inp'), stateSelection = '', breadCrumb = $('search__breadcrumb'), searchTab = $('search__tab');

search.addEventListener('click', ()=>{
    if(search.value == 'Select a State') search.value = '';
    lb.hidden = !lb.hidden;
} )

class State {
    constructor(stateName,stateCities) {
        this.buttonEl = document.createElement('li');
        this.buttonEl.innerHTML = stateName[0];
        this.buttonEl.classList.add('sta');
        this.stateCities = stateCities;
        this.stateName = stateName;
        // add event listeners
        this.buttonEl.addEventListener('click', this.onButtonClick.bind(this));
        lb.appendChild(this.buttonEl);
    }

    onButtonClick() {
        document.querySelectorAll('.sta').forEach(sta => sta.hidden = true);
        this.stateCities.forEach(cit => new City(cit));
        stateSelection = this.stateName;
        search.value = '';
        search.focus();
        breadCrumb.hidden = false;
        breadCrumb.innerHTML = `<i class="fa-solid fa-arrow-left brd_trg"></i><span class="brd_trg copy b text-sm">${this.stateName[0]}</span>`;
        lb.scrollTop = 0;
    }
}

class City {
    constructor(cityName) {
        this.cityName = cityName;
        
        this.buttonEl = document.createElement('li');
        this.buttonEl.innerHTML = cityName;
        this.buttonEl.classList.add('cit');
        // add event listeners
        this.buttonEl.addEventListener('click', this.onButtonClick.bind(this));
        lb.appendChild(this.buttonEl);
    }
    onButtonClick() {
        searchTab.hidden = true;
        resultsTab.hidden = false;
        let cityName = this.cityName, stateName = stateSelection[1];
        $('resultsLoc').innerHTML = cityName + ', ' + stateName;
        getCities(stateName);
        setTimeout(()=>{pagination()}, 1000);
    }
}
let stubs = [];
let getCities = stateName =>{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        stubs = JSON.parse(this.responseText);
      }
    }
    xmlhttp.open("GET", "results.php?q="+stateName, true);
    xmlhttp.send();
}
let pagination = () =>{
    console.log(stubs)
    const result = stubs.reduce((resultArray, item, index) => { 
        const chunkIndex = Math.floor(index/20)
        // start a new chunk
        if(!resultArray[chunkIndex]) { resultArray[chunkIndex] = [] }
        resultArray[chunkIndex].push(item)
        return resultArray
    }, [])
    stubs = result;
    $('page__total').innerHTML = stubs.length + 1;
    page(0);
    
}

const res__stub = en =>`<div class='res__stub'>
    <span class='stub--nm text-xl b'>${en[0]}</span>
    <span class='stub--ad'>${en[1]}</span>
    <span class='stub--ct'>${en[2]}</span>
    <span class='stub--ph txt-sm b justify-center'><i class='fa-solid fa-phone'></i>${en[3]}</span
</div>`;

const page = p => {
    $('page__current').innerHTML = p + 1;
    $('stub__buck').innerHTML = '';
    stubs[p].forEach(en => $('stub__buck').innerHTML += res__stub(en));
    if(p == 0){$('page__prev').disabled = true;} else {$('page__prev').disabled = false;}
    if(p == stubs.length){$('page__next').disabled = true;} else {$('page__next').disabled = false;}
}



$('page__prev').addEventListener('click', ()=> page(Number($('page__current').innerHTML) - 1 - 1) );
$('page__next').addEventListener('click', ()=> page(Number($('page__current').innerHTML) - 1 + 1) );
$('page__up').addEventListener('click', ()=> window.scrollTo(0,0) );


cities.forEach(cit => new State(cit[0],cit[1]) );
search.addEventListener('input', ()=>{
    let val = new RegExp(`^${search.value.toUpperCase()}`);
    if(breadCrumb.innerHTML == ''){
        document.querySelectorAll('.sta').forEach(sta =>{ if(val.test(sta.innerHTML.toUpperCase())){sta.hidden = false}else{sta.hidden = true} })
    } else {
        document.querySelectorAll('.cit').forEach(cit =>{ if(val.test(cit.innerHTML.toUpperCase())){cit.hidden = false}else{cit.hidden = true} })
    }
    lb.hidden = false;
});
breadCrumb.addEventListener('click', ()=>{
    document.querySelectorAll('.cit').forEach(cit => cit.remove());
    document.querySelectorAll('.sta').forEach(sta => sta.hidden = false);
    breadCrumb.innerHTML = '';
    breadCrumb.hidden = true;
    search.innerHTML = '';
    search.focus();
})

document.addEventListener('click', function(event) {
    // console.log(event.target);
    // if(event.target.id != 'search__inp') console.log('foo');
    if (event.target.id == 'search__inp' || event.target.classList.contains('sta') || event.target.classList.contains('brd_trg')){
        // console.log('foo'); // click in search
    } else {
        lb.hidden = true;
        // console.log('bar'); // click on background
    }
});

