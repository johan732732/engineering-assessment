# Requirenments:

- PHP >= 7.4

# How to start?

Download the project and execute the file index.php in your web server to run it.

## Project purpose

This project allows you to consume the data about food trucks, you can see it [here](https://data.sfgov.org/Economy-and-Community/Mobile-Food-Facility-Permit/rqzj-sfat/data). So you will be able to consult the different food trucks, what they offer and where they are located.

# How it works?

Once you load the index file you could search any food truck by food items, business name or location and it will show the food trucks that match the search criteria.

![Search example](https://www.linkpicture.com/q/T1.jpg)

Also you can click on the address to see the food truck location on the map.

![Show map example](https://www.linkpicture.com/q/T2.jpg)

If the search does not match with any record, you will see the message "No records found".

![No records found example](https://www.linkpicture.com/q/T3.jpg)

In the backend we connect to the API through a controller that sends search criteria to get the records that match it. Once we get the results we have a view that goes through each food truck element and show it in a component where is structured the food truck card, it allows to having a separate view from the logic and facilitating the code support too.

## Future work

- Add rating and comments for each food truck
- Show recommended food trucks
- Promote products
- Add promotions for differents products
- Show opening hours
- Add delivery service and means of payment
