import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { useHistory, useParams } from 'react-router-dom';

const AlbumEdit = () => {
  const { id } = useParams();
  const [nome, setNome] = useState('');
  const history = useHistory();

  useEffect(() => {
    axios.get(`/api/albums/${id}`).then(response => {
      setNome(response.data.nome);
    });
  }, [id]);

  const handleSubmit = (e) => {
    e.preventDefault();
    axios.put(`/api/albums/${id}`, { nome }).then(() => {
      history.push('/');
    });
  };

  return (
    <div>
      <h1>Editar Álbum</h1>
      <form onSubmit={handleSubmit}>
        <input type="text" value={nome} onChange={(e) => setNome(e.target.value)} />
        <button type="submit">Salvar</button>
      </form>
    </div>
  );
};

export default AlbumEdit;
