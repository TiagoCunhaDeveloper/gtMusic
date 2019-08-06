# Gt Music - Sistema de streaming de música

O Gt Music é um sistema de streaming de música desenvolvido em php (orientado a objetos), js, html e css, com o padrão MVC, onde o usuário pode escutar suas músicas e criar playlists com elas, além de também poder compartilhar suas playlists com seus amigos pelo sistema.

## Usuário

![1](https://user-images.githubusercontent.com/46055504/62580689-36b89500-b87d-11e9-9706-1dc7874fcb68.PNG)

### Funcionalidades
- Gerenciar músicas (escutar, favoritar, adicionar a uma playlist, baixar,  compartilhar através de um link)
- Gerenciar playlists (criar novas playlists, adicionar/remover músicas, compartilhar pelo sistema, baixar playlist (cria um zip com todas as músicas que estão na playlist selecionada) e tornar a playlist publica (todos os usuários podem ver))
- Buscar músicas, ver e/ou escutar playlists publicas de outros usuários (podendo favoritar para seguir a playlist)
- Alterar perfil (edição de dados cadastrados)

### Visualização em ondas
Ao clicar em uma música para escuta-la ela irá ser reproduzida com sua visualização em ondas

![2](https://user-images.githubusercontent.com/46055504/62581126-96637000-b87e-11e9-9c16-10254d245666.PNG)

## Administrador

![3](https://user-images.githubusercontent.com/46055504/62581432-91eb8700-b87f-11e9-84b3-eef859d0d30e.PNG)

### Funcionalidades
- Gerenciamento de usuários (exclusão e visualização)
- Gerenciamento de músicas (cadastro, edição, exclusão)
- Ver resumo dos dados do sistema (musicas cadastradas, playlist criadas, usuários e gráficos de músicas/playlist e músicas cadastradas por dia)

## Como testar o sistema
- Ter um sevidor web, exemplo Apache
- Importar a base de dados bd_gtmusic.sql (mysql)
- Configurar o arquivo de conexão, localizado em model/conexao.php
- Login do adm (Email: admin@admin.com, Senha: 123123)
- Usuário (Sem usuários para testes, para criar um basta ir em "Login/Cadastro")
- Músicas (O sistema vem com 7 músicas para testes, todos os direitos das músicas são dos próprios artistas, referenciados no sistema, são eles (Two Feet, Eagles, The Eagles, Eric Clapton, Bob Acri, Europe, Bad Wolves))