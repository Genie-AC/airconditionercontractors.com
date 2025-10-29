<!--
SYNC IMPACT REPORT
==================
Version Change: Initial → 1.0.0
Modified Principles: N/A (initial version)

Added Sections:
  - Core Principles (5 principles):
    I. User-First Experience
    II. Data Integrity
    III. Performance & Availability
    IV. Clean Separation of Concerns
    V. Progressive Enhancement
  - Quality Standards (Code Quality, Security Requirements, Testing Requirements)
  - Development Workflow (Feature Development, Code Review, Deployment)
  - Governance (Amendment Process, Versioning Policy, Compliance Review)

Removed Sections: N/A

Templates Requiring Updates:
  ✅ .specify/templates/plan-template.md - Constitution Check section updated with specific gates
  ✅ .specify/templates/spec-template.md - Security requirements already present, aligns with principles
  ✅ .specify/templates/tasks-template.md - Performance and security tasks already present, aligns with principles
  ✅ .specify/templates/checklist-template.md - Generic template, no updates needed

Command Files Checked:
  ✅ .claude/commands/*.md - All commands are generic and do not reference agent-specific guidance

Follow-up TODOs: None
-->

# AirConditionerContractors.com Constitution

## Core Principles

### I. User-First Experience

Users seeking HVAC contractors MUST be able to find relevant results quickly and easily. All features MUST prioritize search speed, location accuracy, and clear presentation of contractor information. The search interface MUST be simple and intuitive, requiring minimal steps to get results.

**Rationale**: The primary value proposition is helping users find contractors fast. Any complexity that slows down search or obscures results undermines the core mission.

### II. Data Integrity

All contractor information MUST be accurate, up-to-date, and verifiable. Database operations MUST preserve data consistency. Location data (cities, states, zip codes) MUST match authoritative sources. Contractor contact information MUST be validated before display.

**Rationale**: A directory is only valuable if users can trust the information. Inaccurate data leads to frustrated users and damages reputation.

### III. Performance & Availability

The website MUST load search interface in under 2 seconds on typical broadband connections. Database queries MUST return results in under 500ms for typical searches. The site MUST handle peak traffic without degradation. Critical paths (search, results display) MUST be optimized.

**Rationale**: Users abandon slow directory sites. Performance directly impacts user acquisition and retention.

### IV. Clean Separation of Concerns

Backend logic (PHP) MUST handle data access and business logic only. Frontend code (JavaScript) MUST handle user interaction and display only. Database schema MUST enforce referential integrity. No business logic in the database; no data access in the frontend.

**Rationale**: Clear separation enables independent testing, easier debugging, and maintainable code as the project grows.

### V. Progressive Enhancement

Core search functionality MUST work without JavaScript. Enhanced features (autocomplete, dynamic filtering, pagination) can require JavaScript but MUST degrade gracefully. All content MUST be accessible to search engines and screen readers.

**Rationale**: Accessibility and SEO are critical for a directory site. Users with JavaScript disabled or assistive technologies must still access core functionality.

## Quality Standards

### Code Quality

- All PHP code MUST use prepared statements for database queries (no raw SQL with user input)
- All JavaScript code MUST handle errors gracefully with user-friendly messages
- All HTML MUST be semantic and valid HTML5
- CSS MUST be organized by component/section with clear naming conventions
- No inline styles or scripts in production HTML (except critical CSS)

### Security Requirements

- All user input MUST be sanitized and validated
- Database credentials MUST be stored in environment variables, never committed to version control
- All forms MUST include CSRF protection
- Contact information display MUST prevent scraping (rate limiting, CAPTCHA for bulk access)
- Email addresses MUST be obfuscated or protected from harvesting

### Testing Requirements

Testing is OPTIONAL unless explicitly requested for a feature. When tests are required:

- Database queries MUST have integration tests validating correct data retrieval
- Search functionality MUST have end-to-end tests covering common user journeys
- Form submissions MUST have validation tests
- Location lookup MUST have contract tests ensuring API compatibility

## Development Workflow

### Feature Development

1. **Specification First**: Document user scenarios and requirements before implementation
2. **Plan Before Code**: Identify affected files, database changes, and dependencies
3. **Incremental Delivery**: Break features into independently testable user stories
4. **Test in Production-Like Environment**: Validate against real database structure and volume

### Code Review

- All changes MUST be reviewed for security vulnerabilities (SQL injection, XSS, CSRF)
- Database schema changes MUST include migration scripts and rollback procedures
- Performance impact MUST be assessed for changes affecting search or results display
- Accessibility MUST be verified for UI changes

### Deployment

- Database migrations MUST be tested on copy of production data before deployment
- Static assets (CSS, JS, images) MUST be versioned to bust caches
- Configuration changes MUST be documented in deployment notes
- Rollback procedure MUST be defined before deploying significant changes

## Governance

### Amendment Process

This constitution can be amended when:

1. New requirements emerge that conflict with existing principles
2. Technical constraints change (e.g., platform migration, new regulations)
3. Team consensus identifies principle gaps or contradictions

Amendments MUST:

- Document rationale for change
- Update version number following semantic versioning
- Propagate changes to dependent templates and documentation
- Be approved before implementation of affected features

### Versioning Policy

- **MAJOR** version increment: Principle removed or fundamentally redefined in backward-incompatible way
- **MINOR** version increment: New principle added or existing principle materially expanded
- **PATCH** version increment: Clarifications, wording improvements, typo fixes

### Compliance Review

- All feature specifications MUST verify compliance in Constitution Check section
- Violations of NON-NEGOTIABLE principles MUST be blocked
- Justified exceptions MUST be documented in Complexity Tracking
- Regular audits SHOULD verify codebase alignment with principles

**Version**: 1.0.0 | **Ratified**: 2025-10-29 | **Last Amended**: 2025-10-29
