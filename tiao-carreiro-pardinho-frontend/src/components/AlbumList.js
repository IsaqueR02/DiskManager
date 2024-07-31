import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

const AlbumList = () => {
  const [albums, setAlbums] = useState([]);

  useEffect(() => {
    axios.get('/api/albums').then(response => {
      setAlbums(response.data);
    });
  }, []);

  const deleteAlbum = (id) => {
    axios.delete(`/api/albums/${id}`).then(() => {
      setAlbums(albums.filter(album => album.id !== id));
    });
  };

  return (
    <div>
      <h1>Álbuns</h1>
      <Link to="/albums/create">Adicionar Álbum</Link>
      <ul>
        {albums.map(album => (
          <li key={album.id}>
            {album.nome}
            <button onClick={() => deleteAlbum(album.id)}>Excluir</button>
            <Link to={`/albums/${album.id}/edit`}>Editar</Link>
          </li>
        ))}
      </ul>
    </div>
  );
};

export default AlbumList;
