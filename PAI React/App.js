import React, { Component } from "react";
import "./styles.css";
import Filter from "./Filter";
import TodoList from "./TodoList";
import NewTask from "./NewTask";

class App extends Component {
  constructor() {
    super();
    this.state = {
      id: 1,
      hidden: false,
      todoListArray: []
    };
    this.handleSubmit = this.handleSubmit.bind(this);
    this.handleChange = this.handleChange.bind(this);
  }

  handleSubmit(value) {
    this.setState(prevState => {
      let object = {
        key: prevState.id + 1,
        text: value,
        isCompleted: false
      };
      return {
        id: prevState.id + 1,
        hidden: prevState.hidden,
        todoListArray: prevState.todoListArray.concat(object)
      };
    });
  }

  handleChange() {
    this.setState(prevState => {
      return {
        ...prevState,
        hidden: !prevState.hidden
      };
    });
  }

  render() {
    return (
      <div className="App">
        <h3> Welcome To My To Do List! </h3>
        <Filter onChange={this.handleChange} checked={this.state.hidden} />
        <hr />
        {this.state.todoListArray.length === 0 ? (
          <p>Nothing to do...</p>
        ) : (
          <TodoList
            todoListArray={this.state.todoListArray}
            hidden={this.state.hidden}
          />
        )}
        <hr />
        <NewTask onSubmit={this.handleSubmit} />
      </div>
    );
  }
}

export default App;
