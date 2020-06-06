import React, { Component } from "react";
import "./styles.css";

class Task extends Component {
  constructor(props) {
    super(props);
    this.state = {
      key: props.key,
      text: props.text,
      isCompleted: props.isCompleted
    };
    this.handleChange = this.handleChange.bind(this);
  }

  handleChange(event) {
    const { checked } = event.target;
    this.setState(prevState => {
      return {
        key: prevState.key,
        text: prevState.text,
        isCompleted: checked
      };
    });
  }

  render() {
    let style = {
      textDecoration: this.state.isCompleted ? "line-through" : "",
      display: this.state.isCompleted && this.props.hidden && "none"
    };
    return (
      <div className="App">
        <label style={style}>
          <input
            type="checkbox"
            checked={this.state.isCompleted}
            onChange={this.handleChange}
          />
          {this.state.text}
        </label>
      </div>
    );
  }
}

export default Task;
