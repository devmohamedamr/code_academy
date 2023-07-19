import React, { Component } from 'react';
import person1 from '../person_5.jpg.webp'
export default class Person extends Component {
  render() {
    return (
      <>
        <div className='person'>
            <div className='person-img'>
            <div className='person-social'></div>

                <img src={person1} />
            </div>
            <div className='person-info'>
                <h2>mohamed amr</h2>
                <h3>full stack developer</h3>
            </div>
        </div>
      </>
    );
  }
}
