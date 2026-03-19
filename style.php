/* styles.css - Design moderno em lilás e branco */

:root {
    --lilac: #c084fc;
    --lilac-dark: #9b59b6;
    --white: #ffffff;
    --light-bg: #f8f1ff;
    --text: #333333;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    background: linear-gradient(135deg, #f8f1ff 0%, #ffffff 100%);
    color: var(--text);
    line-height: 1.6;
    min-height: 100vh;
}

header {
    background: linear-gradient(90deg, var(--lilac), var(--lilac-dark));
    color: white;
    padding: 2rem 0;
    text-align: center;
    box-shadow: 0 4px 20px rgba(192, 132, 252, 0.3);
}

.header-content h1 {
    font-size: 2.5rem;
    margin-bottom: 0.5rem;
}

.header-content p {
    font-size: 1.1rem;
    opacity: 0.95;
}

main {
    max-width: 1100px;
    margin: 2rem auto;
    padding: 0 1.5rem;
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 2rem;
}

.form-container {
    background: white;
    border-radius: 20px;
    padding: 2.5rem;
    box-shadow: 0 10px 30px rgba(192, 132, 252, 0.15);
    height: fit-content;
    border: 1px solid #f0d9ff;
}

.form-container h2 {
    color: var(--lilac-dark);
    margin-bottom: 1.5rem;
    font-size: 1.6rem;
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-group label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--lilac-dark);
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 14px 16px;
    border: 2px solid #e0bbff;
    border-radius: 12px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus,
.form-group select:focus {
    outline: none;
    border-color: var(--lilac);
    box-shadow: 0 0 0 4px rgba(192, 132, 252, 0.2);
}

.btn-primary {
    width: 100%;
    background: var(--lilac);
    color: white;
    border: none;
    padding: 16px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 700;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 1rem;
}

.btn-primary:hover {
    background: var(--lilac-dark);
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(155, 89, 182, 0.4);
}

/* Lista */
.list-container {
    background: white;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(192, 132, 252, 0.15);
    border: 1px solid #f0d9ff;
}

.list-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
}

.list-header h2 {
    color: var(--lilac-dark);
    font-size: 1.6rem;
}

.search-input {
    padding: 12px 20px;
    border: 2px solid #e0bbff;
    border-radius: 12px;
    width: 280px;
    font-size: 1rem;
    transition: all 0.3s;
}

.search-input:focus {
    border-color: var(--lilac);
    box-shadow: 0 0 0 4px rgba(192, 132, 252, 0.2);
}

.table-wrapper {
    overflow-x: auto;
    border-radius: 12px;
    border: 1px solid #f0d9ff;
}

#book-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
}

#book-table th {
    background: var(--light-bg);
    padding: 16px;
    text-align: left;
    font-weight: 700;
    color: var(--lilac-dark);
    border-bottom: 3px solid var(--lilac);
}

#book-table td {
    padding: 18px 16px;
    border-bottom: 1px solid #f0d9ff;
}

#book-table tr:hover {
    background: #fdf4ff;
}

.status-badge {
    padding: 6px 14px;
    border-radius: 9999px;
    font-size: 0.9rem;
    font-weight: 700;
    display: inline-block;
}

.status-lido {
    background: #d1fae5;
    color: #10b981;
}

.status-lendo {
    background: #dbeafe;
    color: #3b82f6;
}

.btn-delete {
    background: #fee2e2;
    color: #ef4444;
    border: none;
    width: 38px;
    height: 38px;
    border-radius: 10px;
    font-size: 1.2rem;
    cursor: pointer;
    transition: all 0.3s;
}

.btn-delete:hover {
    background: #fecaca;
    transform: scale(1.1);
}

.empty-state {
    text-align: center;
    padding: 3rem 1rem;
    color: #9b59b6;
    font-style: italic;
    display: none;
}

footer {
    text-align: center;
    padding: 2rem;
    color: #888;
    font-size: 0.9rem;
    margin-top: 2rem;
}

/* Responsivo */
@media (max-width: 968px) {
    main {
        grid-template-columns: 1fr;
    }
    
    .search-input {
        width: 100%;
    }
}