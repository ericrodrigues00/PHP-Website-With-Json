# Calabouço dos Jogos 🎲

## 📋 Sobre o Projeto
O Calabouço dos Jogos é uma página especializada em Board Games e RPGs, desenvolvida como um projeto web utilizando PHP, HTML, CSS e JSON para armazenamento de dados. O site oferece um catálogo completo de jogos, com funcionalidades de filtragem por categoria e visualização detalhada de produtos.

## 🚀 Funcionalidades

### 1. Página Inicial (index.php)
- Exibição de destaque dos produtos
- Grid responsivo com os 4 primeiros jogos do catálogo
- Seção de boas-vindas e informações sobre a loja

### 2. Catálogo (catalogo.php)
- Listagem completa de todos os jogos
- Filtragem por categorias:
  - Estratégia
  - RPG
  - Cooperativo
  - Família
- Visualização em grid com cards de produtos

### 3. Detalhes do Produto (produto.php)
- Exibição detalhada de cada jogo
- Carrossel de imagens
- Informações completas:
  - Nome
  - Preço
  - Categoria
  - Descrição
  - Componentes inclusos

### 4. Sobre (sobre.php)
- Informações sobre a loja
- Explicação sobre Board Games e RPGs
- Seção de créditos do desenvolvedor

## 🛠️ Tecnologias Utilizadas

### Frontend
- HTML5
- CSS

### Backend
- PHP
- JSON para armazenamento de dados


## 📁 Estrutura do Projeto

```

├── css/
│   └── style.css
├── data/
│   └── jogos.json
├── img/
│   └── [imagens usadas]
├── includes/
│   └── header.php
├── index.php
├── catalogo.php
├── produto.php
└── sobre.php
```

## 💾 Armazenamento de Dados

O projeto utiliza um arquivo JSON (`data/jogos.json`) para armazenar as informações dos jogos. A estrutura do JSON inclui:

```json
{
  "id": number,
  "nome": string,
  "preco": number,
  "categoria": string,
  "imagem_principal": string,
  "imagens": string[],
  "descricao": string,
  "componentes": string[]
}
```

## 🎨 Design e Estilo

### Tema
- Esquema de cores escuro
- Cores principais:
  - Fundo primário: #1a1a1a
  - Fundo secundário: #2d2d2d
  - Cor de destaque: #8a2be2
  - Texto primário: #ffffff
  - Texto secundário: #e0e0e0

### Componentes
- Cards de produto com efeito hover
- Botões estilizados
- Carrossel de imagens
- Grid responsivo
- Header fixo com navegação

## 📱 Responsividade

O site é totalmente responsivo, adaptando-se a diferentes tamanhos de tela:

- Desktop (> 1024px)
- Tablet (768px - 1024px)
- Mobile (< 768px)


## 👨‍💻 Desenvolvedor

- **Nome:** Eric Rodrigues de Oliveira
- **Curso:** Análise e Desenvolvimento de Sistemas
- **Semestre:** 3º


## 🚀 Como Executar

1. Clone o repositório
2. Configure um servidor web (Apache/XAMPP)
3. Coloque os arquivos no diretório do servidor
4. Acesse através do navegador

## 📝 Requisitos

- Servidor web (Apache/XAMPP)
- PHP 7.0 ou superior
- Navegador web moderno

