FROM php:8.5.6-apache@sha256:d81a85c0b4bd74737aa544de4db38ee6270d0006dcb8cb446b569cf3bf1525f1

COPY --chmod=444 /src/ /var/www/html/

# FIXME: Replace with an empty DB.
COPY /initdb /initdb
