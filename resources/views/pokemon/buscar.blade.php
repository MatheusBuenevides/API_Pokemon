<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buscar</title>


    <link href="../../css/app.css" rel="stylesheet">
</head>
<body>

    @foreach ($data as $item)
        <p>
            {{$item['name']}}
        </p>
    @endforeach

    <div id="app"></div>
<!-- versão de desenvolvimento, inclui avisos úteis no console  -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        new Vue({
            el: '#app',
            template:` 
            <div>
                <table class="table table-striped">
                    <tr>
                        <td>Nome</td>
                        <td></td>
                    </tr>
                    <tr v-for="pokemon in results">
                        <td>
                            
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
            </div>`,
            data(){
                return{
                    results:[
                        
                    ]
                }
            },
            mounted() {
                this.dataApi();
            },
            methods: {
                dataApi(){
                    // this.results = data;
                    // console.log();
                }
            },
        })
    </script>    
</body>
</html>