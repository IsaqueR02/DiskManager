import React from 'react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import AlbumList from './components/AlbumList.js';
import AlbumCreate from './components/AlbumCreate.js';
import AlbumEdit from './components/AlbumEdit.js  ';

function App() {
  return (
    <Router>
      <Switch>
        <Route path="/" exact component={AlbumList} />
        <Route path="/albums/create" component={AlbumCreate} />
        <Route path="/albums/:id/edit" component={AlbumEdit} />
      </Switch>
    </Router>
  );
}

export default App;