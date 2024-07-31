import React, { useState } from 'react';
import axios from 'axios';
import { useHistory } from 'react-router-dom';

const AlbumCreate = () => {
  const [nome, setNome] = useState('');
  const history = useHistory();

  const handleSubmit = (e) => {
    e.preventDefault();
    axios.post('/api/albums', { nome }).then(() => {
      history.push('/');
    });
  };

  return (
    <div>
      <h1>Adicionar Álbum</h1>
      <form onSubmit={handleSubmit}>
        <input type="text" value={nome} onChange={(e) => setNome(e.target.value)} />
        <button type="submit">Adicionar</button>
      </form>
    </div>
  );
};

export default AlbumCreate;