# Week 13 — Object-Oriented Application Development

**Syllabus coverage:** Applying MVC Concepts · Code Organization · Reusable Components.

## Instructor demonstration

1. Open `/weeks/13` in the browser.
2. Follow the request from `routes/web.php` to `Week13Controller::__invoke()`.
3. Observe dependency injection of `LibraryCatalogService` in the controller.
4. Trace it to `BookService`, `BookReport`, `Book`, then Blade at `resources/views/weeks/week13.blade.php`.
5. Make a controlled change to sample Book data. Observe the page without changing the controller or Blade structure.

```text
Browser GET /weeks/13
       ↓
routes/web.php  [routing]
       ↓
Week13Controller [controller]
       ↓
LibraryCatalogService [reusable business logic]
       ↓
BookService / BookReport / Book [model objects]
       ↓
weeks/week13.blade.php [view]
       ↓
HTML shown to the browser
```

**Explanation:** MVC is Model–View–Controller. A service class is an additional organizational component used with MVC, not a fourth element in the MVC acronym.

## Your same-topic project

1. Keep the topic from Weeks 11–12.
2. Add or adapt a route at `/my-project` in `routes/web.php`, pointing to `StudentProjectController`.
3. Put request handling and validation in the controller; put SQL access in the Week 12 repository; keep display markup in Blade.
4. Pass your actual project data (from the PDO repository) to Blade. Do **not** keep the default Sample A and Sample B in the final output.
5. Create at least one reusable service method with a meaningful responsibility (for example a summary or filter of your selected topic).
6. Draw a simple MVC request flow for your own program and label every file used.

## Evidence

- [ ] Controller, route, service, model/repository, Blade separated clearly
- [ ] Data persists in SQLite from Week 12
- [ ] Two real example records shown in browser
- [ ] Student-created MVC flow diagram (can be a simple text diagram)
- [ ] Commit + push
