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
<h1>Форма корректировки и удаления знаменитых людей</h1>
<form action="{{ route('updateoneourpeople') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="titleop" class="form-label">Заголовок знаменитые люди</label>
        <input type="text" class="form-control" id="titleop" name="titleop" placeholder="{{ $oneourpeople->title }}" value="{{ $oneourpeople->title }}">
    </div>
    <div class="mb-3">
        <label for="txtop" class="form-label">Текст знаменитые люди</label>
        <textarea class="form-control" id="txtop" name="txtop" rows="3" placeholder="{{ $oneourpeople->content }}" value="{{ $oneourpeople->content }}"></textarea>
    </div>
    <div class="mb-3">
        <img src="{{ asset('public/storage/folder/'.$oneourpeople->url) }}" alt="{{ $oneourpeople->title }}">
        <label for="fileop" class="form-label">Выберите другой файл изображения</label>
        <input class="form-control" type="file" id="fileop" name="fileop">
    </div>
    <input type="hidden" id="formopid" name="formopid" value="{{ $oneourpeople->id }}">
    <button type="submit" class="btn btn-primary">Изменить и Сохранить</button>
    <button type="submit" class="btn btn-danger"><a href="{{ asset('deleteop/'.$oneourpeople->id) }}">Удалить</a></button>
</form>

</body>
</html>

