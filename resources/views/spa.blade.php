<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Подключаем Bootstrap, чтобы не работать над дизайном проекта -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <div class="container mt-5">
            <h1>Список книг нашей библиотеки</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Наличие</th>
                        <th scope="col">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <th scope="row">{{$book['id']}}</th>
                            <td>{{$book['title']}}</td>
                            <td>{{$book['author']}}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary" v-on:click="">
                                    Доступна
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-danger" v-on:click="">
                                    Удалить
                                </button>
                            </td>
                        </tr>
                    @endforeach

                    <!-- Строка с полями для добавления новой книги -->
                    <tr>
                        <th scope="row">Добавить</th>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                        <td></td>
                        <td>
                            <button type="button" class="btn btn-outline-success" v-on:click="">
                                Добавить
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!--Подключаем axios для выполнения запросов к api -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>

    <!--Подключаем Vue.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>

    <script>
        let vm = new Vue({
            el: '#app',
            data: {
            },
            methods: {
                loadBookList(){

                },
                addBook(){

                },
                deleteBook(id){

                },
                changeBookAvailability(id){

                }
            },
            mounted(){
                // Сразу после загрузки страницы подгружаем список книг и отображаем его
                this.loadBookList();
            }
        });
    </script>
</body>
</html>
