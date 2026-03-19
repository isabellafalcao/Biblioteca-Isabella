<?php
require_once 'conexao.php';

// Busca (filtro)
$busca = isset($_GET['busca']) ? trim($_GET['busca']) : '';

$sql = "SELECT * FROM livros ORDER BY criado_em DESC";
$params = [];

if ($busca !== '') {
    $sql = "SELECT * FROM livros 
            WHERE titulo LIKE ? 
               OR autor  LIKE ? 
               OR aluno  LIKE ?
            ORDER BY criado_em DESC";
    $params = ["%$busca%", "%$busca%", "%$busca%"];
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$livros = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca da Turma • Cadastro de Livros</title>
    <link rel="stylesheet" href="livros.css">
    <link rel="icon" href="icon.jpg" type="image/png">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Biblioteca da Turma</h1>
            <p>Controle os livros que os alunos estão lendo ou já leram</p>
        </div>
    </header>

    <main>
        <!-- Formulário de Cadastro -->
        <section class="form-container">
            <h2>Cadastrar Novo Livro</h2>
            <form id="book-form">
                <div class="form-group">
                    <label for="title">Título do Livro</label>
                    <input type="text" id="title" placeholder="Ex: O Pequeno Príncipe" required>
                </div>
                
                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" id="author" placeholder="Ex: Antoine de Saint-Exupéry" required>
                </div>
                
                <div class="form-group">
                    <label for="student">Aluno</label>
                    <input type="text" id="student" placeholder="Ex: Maria Silva" required>
                </div>
                
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" required>
                        <option value="">Selecione o status</option>
                        <option value="Lendo">Lendo</option>
                        <option value="Lido"> Já Lido</option>
                    </select>
                </div>
                
                <button type="submit" class="btn-primary">Cadastrar Livro</button>
            </form>
        </section>

        <!-- Lista de Livros -->
        <section class="list-container">
            <div class="list-header">
                <h2>Livros Cadastrados</h2>
                <input type="text" id="search" placeholder="🔍 Buscar por título, autor ou aluno..." class="search-input">
            </div>
            
            <div class="table-wrapper">
                <table id="book-table">
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Aluno</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody id="book-list"></tbody>
                </table>
            </div>
            
            <p id="empty-message" class="empty-state">Nenhum livro cadastrado ainda. Adicione o primeiro acima! </p>
        </section>
    </main>

    <footer>
        
    </footer>

    <script>
        // Array de livros
        let books = [];
        
        // Elementos do DOM
        const form = document.getElementById('book-form');
        const bookList = document.getElementById('book-list');
        const emptyMessage = document.getElementById('empty-message');
        const searchInput = document.getElementById('search');
        
        // Carregar dados do localStorage
        function loadBooks() {
            const savedBooks = localStorage.getItem('libraryBooks');
            if (savedBooks) {
                books = JSON.parse(savedBooks);
            }
            renderBooks();
        }
        
        // Salvar no localStorage
        function saveBooks() {
            localStorage.setItem('libraryBooks', JSON.stringify(books));
        }
        
        // Renderizar tabela
        function renderBooks(filteredBooks = books) {
            bookList.innerHTML = '';
            
            if (filteredBooks.length === 0) {
                emptyMessage.style.display = 'block';
                return;
            }
            
            emptyMessage.style.display = 'none';
            
            filteredBooks.forEach((book, index) => {
                const row = document.createElement('tr');
                
                // Status badge
                const statusClass = book.status === 'Lido' ? 'status-lido' : 'status-lendo';
                
                row.innerHTML = `
                    <td>${book.title}</td>
                    <td>${book.author}</td>
                    <td>${book.student}</td>
                    <td><span class="status-badge ${statusClass}">${book.status}</span></td>
                    <td>
                        <button onclick="deleteBook(${index})" class="btn-delete" title="Excluir">
                            🗑️
                        </button>
                    </td>
                `;
                
                bookList.appendChild(row);
            });
        }
        
        // Adicionar livro
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const newBook = {
                id: Date.now(),
                title: document.getElementById('title').value.trim(),
                author: document.getElementById('author').value.trim(),
                student: document.getElementById('student').value.trim(),
                status: document.getElementById('status').value
            };
            
            books.unshift(newBook); // Adiciona no topo
            saveBooks();
            renderBooks();
            
            // Limpar formulário
            form.reset();
            
            // Feedback visual
            const btn = form.querySelector('.btn-primary');
            const originalText = btn.textContent;
            btn.textContent = 'Cadastrado com Sucesso!';
            btn.style.backgroundColor = '#10b981';
            
            setTimeout(() => {
                btn.textContent = originalText;
                btn.style.backgroundColor = '';
            }, 1500);
        });
        
        // Excluir livro
        window.deleteBook = function(index) {
            if (confirm('Tem certeza que deseja excluir este livro?')) {
                books.splice(index, 1);
                saveBooks();
                renderBooks();
            }
        };
        
        // Busca em tempo real
        searchInput.addEventListener('input', function() {
            const term = this.value.toLowerCase().trim();
            
            if (!term) {
                renderBooks();
                return;
            }
            
            const filtered = books.filter(book => 
                book.title.toLowerCase().includes(term) ||
                book.author.toLowerCase().includes(term) ||
                book.student.toLowerCase().includes(term)
            );
            
            renderBooks(filtered);
        });
        
        // Inicializar
        window.onload = loadBooks;
    </script>
</body>
</html>