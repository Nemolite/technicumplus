<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>
<h1>Форма корректировки и удаления конкурсов</h1>
<form action="{{ route('updatekonkurs') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="titlek" class="form-label">Заголовок конкурса</label>
        <input type="text" class="form-control" id="titlek" name="titlek" placeholder="{{ $onekonkurs->title }}" value="{{ $onekonkurs->title }}">
    </div>
    <div class="mb-3">
        <label for="txtk" class="form-label">Текст конкурса</label>
        <textarea class="form-control" id="txtk" name="txtk" rows="3" placeholder="{{ $onekonkurs->content }}" value="{{ $onekonkurs->content }}"></textarea>
    </div>
    <div class="mb-3">
        <img src="{{ asset('public/storage/folder/'.$onekonkurs->url) }}" alt="{{ $onekonkurs->title }}">
        <label for="filek" class="form-label">Выберите другой файл изображения</label>
        <input class="form-control" type="file" id="filek" name="filek">
    </div>
    <input type="hidden" id="formkid" name="formkid" value="{{ $onekonkurs->id }}">
    <button type="submit" class="btn btn-primary">Изменить и Сохранить</button>
    <button type="submit" class="btn btn-danger"><a href="{{ asset('deletekonkurs/'.$onekonkurs->id) }}">Удалить</a></button>
</form>

</body>
</html>
