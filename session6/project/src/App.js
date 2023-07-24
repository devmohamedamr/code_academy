import logo from './logo.svg';
import './App.css';
import {Link,Outlet} from 'react-router-dom'
function App() {
  return (
    <>
      <h1>app component</h1>
      <div>
        <Link to='home'>home</Link>
        <Link to='about'>about</Link>
        <Link to='contact'>contact</Link>
      </div>
      <Outlet />
    </>
  );
}

export default App;
