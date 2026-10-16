# Week 13 — Object-Oriented Application Development

**Syllabus Coverage:** Model-View-Controller (MVC) Architecture · Code Organization Principles · Reusable Component Design

## Instructor Demonstration

The following demonstration illustrates a complete MVC request lifecycle:

1. Navigate to `/weeks/13` in your browser

2. Trace the request flow:
   - Begin at `routes/web.php`
   - Follow to `Week13Controller::__invoke()`

3. Observe dependency injection:
   - Identify `LibraryCatalogService` injection in the controller constructor

4. Trace the service layer:
   - Follow calls through `BookService`
   - Examine `BookReport` and `Book` model
   - Review final rendering in `resources/views/weeks/week13.blade.php`

5. Practical exercise:
   - Modify sample Book data
   - Observe that the page updates without requiring changes to controller or view structure

### Request Flow Diagram

```text
Browser: GET /weeks/13
         ↓
routes/web.php [Routing Layer]
         ↓
Week13Controller [Controller Layer]
         ↓
LibraryCatalogService [Business Logic Layer]
         ↓
BookService / BookReport / Book [Model Layer]
         ↓
weeks/week13.blade.php [View Layer]
         ↓
HTML Response → Browser
```

**Architectural Note:** MVC represents Model–View–Controller. Service classes provide an additional organizational layer for business logic and are utilized alongside MVC principles, not as a replacement for any MVC component.

## Student Project Development

**Continuity Requirement:** Maintain consistency with your selected topic from Weeks 11–12.

### Implementation Requirements

1. **Routing Configuration:**
   - Define or adapt route for `/my-project` in `routes/web.php`
   - Configure route to invoke `StudentProjectController`

2. **Architectural Separation:**
   - **Controller Layer:** Implement request handling and input validation
   - **Repository Layer:** Isolate all SQL/database access (from Week 12)
   - **View Layer:** Maintain all presentation markup in Blade templates

3. **Data Integration:**
   - Pass authentic project data from PDO repository to Blade templates
   - **Remove** default "Sample A" and "Sample B" placeholder data from final implementation

4. **Service Layer:**
   - Develop minimum of one reusable service method with clearly defined responsibility
   - Example responsibilities: data summarization, filtering, formatting, business rule validation

5. **Documentation:**
   - Create a simplified MVC request flow diagram for your application
   - Label every participating file in the request lifecycle

## Deliverables

Complete the following checklist:

- [ ] Clear separation of Controller, Route, Service, Model/Repository, and Blade components
- [ ] SQLite data persistence from Week 12 functioning correctly
- [ ] Two authentic domain-specific records displayed in browser interface
- [ ] Student-created MVC request flow diagram (text-based diagram acceptable)
- [ ] Git commit and push to repository

**Diagram Format:** A text-based representation with arrows showing file flow is acceptable. Complex visualization tools are not required.
