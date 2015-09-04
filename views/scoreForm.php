<div class='scoreForm'>
    
    <form class="scoreForm" action="controls/conferma.php" method="POST">

            <p class='scoreForm'>

                    Inserisci il tuo nome per inviare il tuo punteggio: <br><br>
                
                    <label>Nome utente: 
                            <input type='text' name='nomeScorer' 
                                   placeholder='Inserisci il tuo nome' maxlength='29' title="Inserisci l' username" required>
                    </label>
                    &nbsp;      <!--tabulazione tra un form e l'altro-->
                    <label>Monete:      <!--prende in ingresso un valore non modificabile-->
                            <input type='text' placeholder='Monete' name='punteggioMonete' 
                                   value="<?php echo htmlspecialchars($_SESSION['monete']); ?>" maxlength='20' title='Inserisci la password' required readonly>
                    </label><br/><br/>

                    <input class='loginBotton' type='submit' name='sendR' value='Invia punteggio'>
            </p>

    </form>

</div>