<!-- HEADER DA PAGINA  -->  
<?php include('components/templates/Header.php') ?>
    <div class="eventos-wrap">
        <div class="page-title">
            <img src="assets/imgs/line_title.png" alt="">
            <span>Atendimento aos Logistas</span>
        </div>
        <div class="contato-container">
            <div >
                <form class="formulario-contato"  v-on:submit="sendMail">
                    <label>Nome:</label>
                    <input type="text" v-model="nome" name="nome" pattern="[a-z\s]+$"  required/>
                    <label>Loja:</label>
                    <input type="text" v-model="loja" name="loja" required/>
                    <label>Assunto:</label>
                    <input type="text" v-model="assunto" name="assunto" required/>
                    <label>E-mail:</label>
                    <input type="email" v-model="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required/>
                    <label>Mensagem:</label>
                    <textarea style="height: 10vh;" v-model="mensagem"  name="mensagem" required></textarea>
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>
<!-- FOOTER DA PÁGINA -->
<?php include('components/templates/Footer.php') ?>
    <script>
        new Vue({
            el: "#app",
            data: {
                menuIsOpen: false, 
                nome: null,
                loja: null,
                email: null,
                mensagem: null,   
                assunto: null,        
            },
            methods: {
                sendMail: function(event) {
                    if(this.nome === null) return alert('preencha o nome')
                    if(this.email === null) return alert('preencha o email')
                    if(this.mensagem === null) return alert('preencha a mensagem')

                    fetch("https://api-elashopping.dmxapp.com.br/mail", {
                        method: 'POST',
                        headers: new Headers ({
                        'Content-Type': 'application/json',
                        }),
                        body: JSON.stringify({
                            destinatario: 'contato@elashopping.com.br',
                            assunto: this.assunto,
                            nome: this.nome,
                            email: this.email,
                            loja: this.loja,
                            mensagem: this.mensagem,
                        })
                    }).then( resp => alert('Mensagem enviada com sucesso!'))
                    event.preventDefault()
                }
        
            },
            mounted() {
      
            }
      
        })
    </script>
</body>
</html>