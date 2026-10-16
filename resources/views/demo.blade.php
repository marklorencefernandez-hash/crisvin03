<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $projectTitle }} | Laravel OOP</title>
  <style>
    * { box-sizing:border-box } body { margin:0;background:#f4f7fc;color:#17253a;font-family:system-ui,-apple-system,'Segoe UI',Arial,sans-serif }
    main { max-width:920px;margin:55px auto;padding:24px } .top { color:#1564c0;font-weight:700;font-size:13px;letter-spacing:.08em;text-transform:uppercase }
    h1 { font-size:36px;letter-spacing:-.03em;margin:12px 0 } .lead { color:#53627a;line-height:1.6 }
    .cards { display:grid;grid-template-columns:repeat(auto-fit,minmax(270px,1fr));gap:16px;margin:28px 0 }
    article { padding:24px;border-radius:14px;border:1px solid #dde5f0;background:white;box-shadow:0 8px 25px #22325a09 }
    h2 { font-size:19px;margin:0 0 18px } dt { color:#617085;font-size:13px } dd { font-size:16px;font-weight:600;margin:5px 0 15px }
    .summary { border-top:1px solid #e4e8f0;padding-top:15px;color:#145aaf }
    a { color:#145aaf;text-decoration:none;font-weight:600 } code { background:#eaf0f8;padding:2px 6px;border-radius:4px }
  </style>
</head>
<body><main>
  <div class="top">Object-Oriented Programming Using PHP · Laravel</div>
  <h1>{{ $projectTitle }}</h1>
  <p class="lead">Namespaces: <code>App\Models</code>, <code>App\Services</code>, <code>App\Reports</code>. Composer autoloads all three classes under the <code>App\</code> prefix.</p>
  <div class="cards">
    @foreach($records as $record)
    <article>
      <h2>Record {{ $loop->iteration }}</h2>
      <dl><dt>Title</dt><dd>{{ $record['title'] }}</dd><dt>Author</dt><dd>{{ $record['author'] }}</dd></dl>
      <div class="summary">{{ $record['summary'] }}</div>
    </article>
    @endforeach
  </div>
  <p><a href="/">← Back to home</a></p>
</main></body></html>
