<!-- resources/views/quotes.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Kanye Quotes</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>
    <div id="app">
        <ul>
            <li v-for="quote in quotes" :key="quote">@{{ quote }}</li>
        </ul>
        <button @click="refreshQuotes">Refresh Quotes</button>
    </div>

    <script>
        new Vue({
            el: '#app',
            data: {
                quotes: @json($quotes)
            },
            methods: {
                refreshQuotes() {
                    fetch('/fetch-quotes')
                        .then(response => response.json())
                        .then(data => {
                            this.quotes = data;
                        });
                }
            }
        });
    </script>
</body>
</html>