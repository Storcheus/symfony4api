# symfony4api

git clone https://github.com/Storcheus/symfony4api.git project-folder/

cd project-folder/

composer install

set the variables ([db_username],[db_password],[db_name]) in the file .env
DATABASE_URL=mysql://[db_username]:[db_password]@127.0.0.1:3306/[db_name]

bin/console doctrine:migrations:migrate

bin/console csv:import src/Data/property-data.csv

bin/console serve:start
