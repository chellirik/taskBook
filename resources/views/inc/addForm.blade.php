<form action="{{ route('submit') }}" method="post">
    @csrf
    <div class="form-group mt-3">
        <label for="name">Имя</label>
        <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="name">Email</label>
        <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="name">Текст задачи</label>
        <textarea type="text" name="message" placeholder="Введите задачу" id="message" class="form-control"> </textarea>
    </div>
    <button type='submit' class="btn btn-success mt-3">Отправить</button>
</form>