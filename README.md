
<div>
    <h1 align="center"> Gallery</h1>
</div>

<p align="center">Art gallery built using laravel and blade</p>

<div align="center">
    <a href="https://laravel.com/"><img src="https://i.ibb.co/X543zL7/images-removebg-preview.png" width="350"></a>
</div>

<div>
</div>



<div align="center">
    <a href="https://laravel.com/"><img src="https://github.com/abdimk/Gallery/blob/main/.gitlocal/Screenshot%20from%202024-06-29%2016-13-34.png" width="750"></a>
</div>


#### Usage
The app is under devlopment

#### Migrations
To create all the nessesary tables and columns, run the following
```
php artisan migrate
```



#### For Migration and seed the database 
To create all the nessesary tables and columns and seed the database at the same time
```
php artisan migrate:refresh --seed 
```

#### File Uploading
When uploading listing files, they go to "storage/app/public". Create a symlink with the following command to make them publicly accessible.
```
php artisan storage:link
```

#### Running The App
Upload the files to your document root
```
php artisan serve
```
