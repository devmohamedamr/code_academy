import React, { Component } from 'react';
import Card from './Card';

export default class Home extends Component {
    constructor(){
        super()
        this.state = {
            cards:[
                {title:"mohamed",desc:"backend course"},
                {title:"awdawdwadwad 2",desc:"awdwadawdawd 2"},
                {title:"awdawdwadwad 3",desc:"awdwadawdawd 3"},
            ]
        }
    }
  render() {
    return (
        <>
            <div className='container'>
                <div className='row'>
                    {this.state.cards.map((card)=> <Card title={card.title} desc={card.desc} /> )}
                </div>
            </div>
        </>
    );
  }
}
