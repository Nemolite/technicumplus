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
<h1>Форма корректировки и удаления новости</h1>
<form action="{{ route('updatenews') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Заголовок новости</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $onenews->title }}">
    </div>
    <div class="mb-3">
        <label for="txtnews" class="form-label">Текст новости</label>
        <textarea class="form-control" id="txtnews" name="txtnews" rows="3" value="{{ $onenews->content }}"></textarea>
    </div>
    <div class="mb-3">
        <img src="{{ asset('public/storage/folder/'.$onenews->url) }}" alt="{{ $onenews->title }}">
        <label for="formnews" class="form-label">Выберите другой файл изображения</label>
        <input class="form-control" type="file" id="formnews" name="formnews">
    </div>
    <input type="hidden" id="formnewsid" name="formnewsid"value="{{ $onenews->id }}">
    <button type="submit" class="btn btn-primary">Изменить и Сохранить</button>
    <button type="submit" class="btn btn-danger"><a href="{{ asset('deletenews/'.$onenews->id) }}">Удалить</a></button>
</form>

</body>
</html>
