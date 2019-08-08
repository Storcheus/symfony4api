# symfony4api

git clone https://github.com/Storcheus/symfony4api.git project-folder/

cd project-folder/

composer install

bin/console doctrine:migrations:migrate

bin/console csv:import src/Data/property-data.csv

bin/console serve:start
