console.log('bar');
let $ = a => document.getElementById(a), lb = $('lb'), search = $('search__inp'), stateSelection = '', breadCrumb = $('search__breadcrumb'), searchTab = $('search__tab'), stubPage = 0;

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
        getCities(cityName);
    }
}
let getCities = (citySelection) =>{
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        page(JSON.parse(this.responseText));
      }
    }
    xmlhttp.open("GET", "results3.php?q="+stateSelection[1]+"&p="+stubPage+"&c="+citySelection, true);
    xmlhttp.send();
}
let page = p =>{
    $('page__total').innerHTML = p[0];
    $('page__current').innerHTML = stubPage + 1;
    $('stub__buck').innerHTML = '';
    p[1].forEach(stub => {
        try{
            $('stub__buck').innerHTML += res__stub(stub);
        }catch{console.log(stub)}
    });
    if(stubPage == 0){$('page__prev').disabled = true;} else {$('page__prev').disabled = false;}
    if(stubPage == p[0] + 1){$('page__next').disabled = true;} else {$('page__next').disabled = false;}
}

const res__stub = en =>`<div class='res__stub'>
    <span class='stub--nm text-xl b'>${en[0]}</span>
    <span class='stub--ad'>${en[1]}</span>
    <span class='stub--ct'>${en[2]}</span>
    <span class='stub--ph txt-sm b justify-center'><i class='fa-solid fa-phone'></i>${en[3]}</span
</div>`;

$('page__prev').addEventListener('click', ()=> {
    stubPage--;
    getCities();
} );
$('page__next').addEventListener('click', ()=> {
    stubPage++;
    getCities();
} );

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
    if (event.target.id == 'search__inp' || event.target.classList.contains('sta') || event.target.classList.contains('brd_trg')){
        // console.log('foo'); // click in search
    } else {
        lb.hidden = true;
        // console.log('bar'); // click on background
    }
});

