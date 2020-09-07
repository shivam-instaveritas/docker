docker build -t shivamkesarwani/docker-deploy:1.0 .

docker run -d -t --name "TestContainer" shivamkesarwani/docker-deploy:1.0 /bin/bash
>> 37a241edd98d7c7f99bb97022dd2f5c07e689a37ac02f8308155b1e12ba571f5

docker exec -i -t 37a241edd98d7c7f99bb97022dd2f5c07e689a37ac02f8308155b1e12ba571f5 /bin/bash