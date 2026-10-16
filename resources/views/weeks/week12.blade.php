<!doctype html>
<html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Week 12 — PDO CRUD</title><style>
body{font-family:system-ui,Arial;background:#f4f7fc;color:#1b2940;margin:0}main{max-width:1050px;margin:40px auto;padding:22px}
header{border-left:5px solid #2469cb;padding:2px 20px}h1{margin:0 0 7px}p{line-height:1.65;color:#526176}
.panel{background:white;border:1px solid #dbe4ef;padding:23px;border-radius:12px;margin:20px 0}
input{padding:10px;border:1px solid #c9d5e6;border-radius:6px;max-width:190px}button{background:#1758b5;color:white;border:none;border-radius:6px;padding:10px;cursor:pointer}.danger{background:#b43b4a}
.row{display:flex;flex-wrap:wrap;gap:10px;align-items:center;padding:12px 0;border-top:1px solid #e3e9f2}.name{min-width:140px;font-weight:600}
code{background:#e8f0fc;padding:3px 6px;border-radius:4px}a{color:#1b64ba}label{display:inline-block;margin:5px 8px 5px 0}
.notice{background:#eaf7ef;padding:10px 15px;border-radius:5px;color:#276740}
</style></head><body><main>
<a href="/">← Home</a><header><div>OBJECT-ORIENTED PROGRAMMING USING PHP</div><h1>Week 12 · PDO and CRUD</h1><p>Use plain PHP <code>PDO</code> with SQLite. Create, Read, Update and Delete all use parameterized SQL where input is present. This example is <strong>not</strong> Eloquent ORM.</p></header>
@if(session('message'))<p class="notice">{{ session('message') }}</p>@endif
<div class="panel"><h2>Create a record</h2>
<form method="POST" action="{{ route('week12.store') }}">@csrf
<label>Name <input name="name" required maxlength="120" placeholder="Notebook" value="{{ old('name') }}"></label>
<label>Quantity <input type="number" name="quantity" min="0" max="100000" required value="{{ old('quantity', 5) }}"></label>
<button type="submit">Create</button></form>
@if($errors->any())<p style="color:#ad354b">{{ $errors->first() }}</p>@endif
</div>
<div class="panel"><h2>Read, Update and Delete</h2>
@forelse($items as $item)
<div class="row"><div class="name">#{{ $item['id'] }}</div>
<form method="POST" action="{{ route('week12.update', $item['id']) }}">@csrf @method('PATCH')
<input aria-label="Item name" name="name" required maxlength="120" value="{{ $item['name'] }}">
<input aria-label="Quantity" type="number" name="quantity" min="0" max="100000" required value="{{ $item['quantity'] }}">
<button type="submit">Update</button></form>
<form method="POST" action="{{ route('week12.destroy', $item['id']) }}">@csrf @method('DELETE')<button type="submit" class="danger">Delete</button></form>
</div>
@empty <p>There are no records yet. Create your first record above.</p>
@endforelse</div>
<div class="panel"><h2>Learning evidence</h2><p>Inspect <code>app/Database/PdoSqliteFactory.php</code>, <code>InventoryRepository.php</code>, <code>Week12Controller.php</code>, and this Blade file. In the terminal try <code>php artisan oop:pdo-demo</code>.</p></div>
</main></body></html>
