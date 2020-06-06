import React, { Component } from "react";
import "./styles.css";
import Task from "./Task";

class TodoList extends Component {
  constructor(props) {
    super(props);
    this.state = {};
  }

  render() {
    return (
      <div className="App">
        {this.props.todoListArray.map(item => (
          <Task
            key={item.key}
            text={item.text}
            isCompleted={item.isCompleted}
            hidden={this.props.hidden}
          />
        ))}
      </div>
    );
  }
}

export default TodoList;
