# what is web service in php ?

  1. web services is used to get data from any URL in your webpage 
  2. web services is used to data from URL in form of .json 

# what is json ?

  1. json stands for javascript object notation 
  2. json is used in api and web services
  3. json stored data in object 
  4. json file extension is .json 

    ```
    {
        "users":[
            {
                "id":101,
                "name":"brijesh",
                "age":35,
                "salary":95200,
                "department":"Trainer"

            }
        ]
    }

    ```      


  # what is api ?

    1. api stands for application programming interface 
    2. api is basically created for mobile app | ios app and wbe app to get dynamic data from any web services.
    3. api is fetch also data from web url 
    4. api created crud operations and its data is in .json formate 
    5. crud app api create data should get in .json 

    ```
     {
        "users":[
            {
                "id":101,
                "name":"brijesh",
                "age":35,
                "salary":95200,
                "department":"Trainer"
                
            },

            {
                "id":101,
                "name":"govind",
                "age":35,
                "salary":45200,
                "department":"wordpress developer"
                
            },

            {
                "id":101,
                "name":"Harmit",
                "age":35,
                "salary":45300,
                "department":"php developer"
                
            },

            {
                "id":101,
                "name":"vijay",
                "age":35,
                "salary":46200,
                "department":"php developer"
                
            }


        ]
    }

    ```   


  # how to create any api in php ?

    1. php create api using two function that are ...

       1. json_encode();

       **this is used to encode any array into json**

       2. json_decode();

       **this is used to decode any json encode formate to decode formate**
          