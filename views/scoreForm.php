<div class='scoreForm'>

    <form class="scoreForm" action="game.php" method="POST">

            <p class='scoreForm'>

                    Inserisci il tuo nome per inviare il tuo punteggio: <br><br>
                
                    <label>Nome utente: 
                            <input type='text' name='nomeScorer' placeholder='Inserisci il tuo nome' maxlength='29' title="Inserisci l' username" required>
                    </label>
                    &nbsp;
                    <label>Monete: 
                            <input type='text' placeholder='Monete' name='punteggioMonete' maxlength='20' title='Inserisci la password' required readonly>
                    </label><br/><br/>

                    <input class='loginBotton' type='submit' name='login' value='Invia punteggio'>
            </p>

    </form>

</div>