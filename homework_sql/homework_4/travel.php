homework_4_Kaloyan


1 SELECT destinations.destination_name, countries.name FROM destinations
JOIN countries ON destinations.country_id=countries.country_id

2 SELECT countries.name, destinations.destination_name  FROM countries
JOIN destinations ON destinations.country_id=countries.country_id

3 SELECT countries.name, destinations.destination_name  FROM countries
left JOIN destinations ON destinations.country_id=countries.country_id

4 SELECT hotels.hotel_name, destinations.destination_name,countries.name FROM `hotels` 
JOIN destinations ON destinations.destination_id = hotels.destination_id
JOIN countries On destinations.country_id = countries.country_id

5 SELECT countries.name, destinations.destination_name,hotels.hotel_name FROM countries
left JOIN destinations on countries.country_id = destinations.country_id
LEFT JOIN hotels on destinations.destination_id = hotels.destination_id

6 SELECT packages.package_id, countries.name, destinations.destination_name, durations.duration FROM `packages` 
left JOIN destinations on destinations.destination_id = packages.destination_id
JOIN countries ON destinations.country_id = countries.country_id
Left JOIN durations On packages.duration_id = durations.duration_id

7 SELECT
    countries.name,
    destinations.destination_name,
    hotels.hotel_name,
    packages.package_id,
    durations.duration
FROM
    `countries`
LEFT JOIN destinations ON destinations.country_id = countries.country_id
LEFT JOIN hotels ON hotels.destination_id = destinations.destination_id
LEFT join packages ON packages.destination_id = destinations.destination_id
Left JOIN durations on packages.duration_id = durations.duration_id