@extends('layout')

@section('title') Главная @endsection

@section('main')
<body>
    <main>
        <section class="message-section">
            <h1>Отправить сообщение</h1>
            <input type="text" id="message-input" placeholder="Введите ваше сообщение">
            <button onclick="sendMessage()">Отправить</button>

            <h2>История сообщений</h2>
            <ul id="message-list">
                <!-- Список сообщений будет пополняться -->
            </ul>
        </section>
    </main>

    <script>
        function sendMessage() {
            const messageInput = document.getElementById('message-input');
            const messageList = document.getElementById('message-list');

            if (messageInput.value.trim() !== '') {
                const newMessage = document.createElement('li');
                newMessage.textContent = messageInput.value;
                messageList.appendChild(newMessage);
                messageInput.value = '';
            }
        }
    </script>
</body>
@endsection