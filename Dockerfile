FROM nginx

COPY wrapper.sh /

COPY html /usr/share/nginx

CMD ["./wrapper.sh"]
