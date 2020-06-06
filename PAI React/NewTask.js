import React, { Component } from "react";
import "./styles.css";

class NewTask extends Component {
  constructor(props) {
    super(props);
    this.state = {
      text: ""
    };
    this.handleKeyDown = this.handleKeyDown.bind(this);
    this.handleChange = this.handleChange.bind(this);
    this.handleSubmit = this.handleSubmit.bind(this);
  }

  handleChange(event) {
    const { value } = event.target;
    this.setState({
      text: value
    });
  }

  handleKeyDown(e) {
    if (e.key === "Enter") {
      let value = this.state.text;
      this.props.onSubmit(value);
      this.setState({
        text: ""
      });
    }
  }

  handleSubmit() {
    let value = this.state.text;
    this.props.onSubmit(value);
    this.setState({
      text: ""
    });
  }

  render() {
    return (
      <div className="App">
        <input
          type="text"
          value={this.state.text}
          onChange={this.handleChange}
          onKeyDown={this.handleKeyDown}
        />
        <button onClick={this.handleSubmit}>Add</button>
      </div>
    );
  }
}

export default NewTask;
