import React, { Component } from 'react';
import axios from 'axios';
export default class About extends Component {
    constructor(props) {
        super(props);
        this.state = {value: ''};
    
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
      }
    
      handleChange(event) {
        this.setState({value: event.target.value});
      }
    
      handleSubmit(event) {
        console.log(this.state.value)
        // alert('A name was submitted: ' + this.state.value);
        event.preventDefault();
      }

      componentDidMount(){
        console.log("mount")
      }

      componentDidUpdate(){
        console.log("update")
      }
    
      render() {
        return (
          <form onSubmit={this.handleSubmit}>
            <label>
              Name:
              <input type="text" value={this.state.value} onChange={this.handleChange} />
            </label>
            <input type="submit" value="Submit" />
          </form>
        );
      }
    }