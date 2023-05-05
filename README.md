# Descrizione

Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

## :heavy_check_mark: Milestone 1

Creare un form che invii in GET la lunghezza della password.

- Una nostra funzione userà questo dato per creare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente.
- Scriviamo tutto (logica e layout) in un unico file index.php

## :heavy_check_mark: Milestone 2

Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file `functions.php` che includeremo poi nella pagina principale

## :heavy_check_mark: Milestone 3 (BONUS)

Invece di visualizzare la password nella index, effettuare un `redirect` ad una pagina dedicata che tramite `$\_SESSION` recupererà la password da mostrare all’utente.

## :x: Milestone 4 (BONUS)

Gestire ulteriori parametri per la password:

- Quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme).
- Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.
