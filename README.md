<h1>Technical Interview (API)</h1>
<br>
<p>Data used</p>
<ul>
<li><a href="https://www.kaggle.com/datasets/sovannt/world-bank-youth-unemployment">World Bank Youth Unemployment Rates</a></li>
</ul>
The csv file is located in public folder with name ```data.csv```
#Start the project<br>
```docker compose up -d```

#Stop the project<br>
```docker compose down```

The database is located in ```database\database.sqlite```

To import data to the database, run the following command<br>
```docker exec -it {container name} php artisan import:import-csv```
#API Endpoints
The API is located at ```http://localhost:{PORT}/api/unemployment```<br>

To change the port, edit the docker-compose.yml file and change the port in the php service.<br>

Front-end is separated from this project for scalability and maintainability.

