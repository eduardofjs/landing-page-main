FROM wordpress:6.0.3-php7.4-apache
SHELL ["/bin/bash", "-c"] 

# Install sudo and git
RUN apt-get update && \
    apt-get -y install sudo && \
    apt-get install -y git curl build-essential

WORKDIR /var/www/html

# Copy package.json and package-lock.json
COPY ./configs/theme/directto/package*.json ./

# Install NVM
RUN curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.39.2/install.sh | bash
RUN source ~/.nvm/nvm.sh; \
    nvm install 16; \
    nvm use 16;

EXPOSE 80

CMD ["apache2-foreground"]