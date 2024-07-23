# Laravel Boolfolio - Project Typology

## Prima parte

### Descrizione:

```txt
Continuiamo a lavorare sul codice dei giorni scorsi, ma in una nuova repo e aggiungiamo una nuova entità Type.
Questa entità rappresenta la tipologia di progetto ed è in relazione one to many con i progetti.
I task da svolgere sono diversi, ma alcuni di essi sono un ripasso di ciò che abbiamo fatto
nelle lezioni dei giorni scorsi:
```

### Milestones:

-   Creare la migration per la tabella types
-   Creare il model Type
-   Creare la migration di modifica per la tabella projects per aggiungere la chiave esterna
-   Aggiungere ai model Type e Project i metodi per definire la relazione one to many
-   Visualizzare nella pagina di dettaglio di un progetto la tipologia associata, se presente
-   Permettere all’utente di associare una tipologia nella pagina di creazione e modifica di un progetto
-   Gestire il salvataggio dell’associazione progetto-tipologia con opportune regole di validazione

### Bonus 1:

-   Creare il seeder per il model Type.

### Bonus 2:

-   Aggiungere le operazioni CRUD per il model Type, in modo da gestire le tipologie di progetto direttamente dal pannello di amministrazione.
