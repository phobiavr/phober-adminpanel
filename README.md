https://nova.laravel.com/docs/3.0/installation.html

composer update

php artisan nova:install

php artisan nova:publish

php artisan:migrate


https://www.itsolutionstuff.com/post/laravel-amazon-s3-file-upload-tutorialexample.html

S3 policy:

```json
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Sid": "PublicRead",
      "Effect": "Allow",
      "Principal": "*",
      "Action": "s3:GetObject",
      "Resource": "arn:aws:s3:::phober-media-bucket/*"
    }
  ]
}
```


