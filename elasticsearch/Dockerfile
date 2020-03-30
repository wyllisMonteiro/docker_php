FROM ubuntu:latest

RUN apt-get update \
    && apt-get install -y gpgv gnupg gnupg2 gnupg1 

RUN  apt-get update \
  && apt-get install -y wget \
  && rm -rf /var/lib/apt/lists/*

RUN wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | apt-key add -

RUN apt-get update
RUN apt-get install apt-transport-https

RUN echo "deb https://artifacts.elastic.co/packages/7.x/apt stable main" | tee -a /etc/apt/sources.list.d/elastic-7.x.list
RUN apt-get update
RUN apt-get install elasticsearch

CMD ["curl", "localhost:9200"]