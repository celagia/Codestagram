FOLDER=/var/www/html/public/storage/
if [ ! -d "$FOLDER" ]; then
    echo "$FOLDER is not a directory, copying storage_ content to storage"
    cp -r /var/www/html/public/storage_/. /var/www/html/public/storage
    echo "deleting storage_..."
    rm -rf /var/www/html/public/storage_
fi