curl -i -u darik-web-app:NotASecret http://localhost:8000/token -d 'grant_type=password&username=teacherdemo&password=password&scope=api+offline_access+openid'
echo ""
