<!-- Modellizzare la struttura di una tabella per memorizzare tutti i dati riguardanti delle auto usate messe in vendita da un concessionario,
cercando di inserire più dati possibili per evitare di dover aggiornare la tabella in futuro. -->

id(PRIMARY_KEY [indice]) - intero - MEDIUMINT - AUTOINCREMENT(UNIQUE - NOT NULL)
marca - stringa - VARCHAR(20) - NOTNULL 
modello - stringa -  VARCHAR(20) - NOTNULL
colore - stringa - VARCHAR(20) - NOTNULL
peso - numero decimale -FLOAT(5,1) - NOTNULL
posti - intero - TINYINT - NOTNULL
accessori - stringa - TEXT  -NOTNULL
chilometri_percorsi - intero - MEDIUMINT - NOTNULL
prezzo - intero - MEDIUMINT - NOTNULL
prezzo_noleggio - intero MEDIUMINT - NULL
potenza - intero - TINYINT - NOTNULL
velocita_massima - intero - SMALLINT - NOTNULL
tipo_carburante - stringa - VARCHAR(20) - NOTNULL
targa - stringa -VARCHAR(10) - NULL
data_immatricolazione - data - DATE - NOTNULL

