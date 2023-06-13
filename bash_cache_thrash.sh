aws s3 sync . s3://www.arnaudo.info/ --exclude ".git/*"
echo "syncing s3"
for i in $(aws cloudfront list-distributions | jq '[.[] | .Items[].Id ]' | awk -F '"' '{print $2}')
do 
    aws cloudfront create-invalidation --distribution-id=$(echo $i) --paths / > /dev/null 
    echo "clearing cache $i"
done
