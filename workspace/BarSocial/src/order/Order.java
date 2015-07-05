package order;

import user.User;
/*Classe que representa um pedido*/
public class Order {
	private int id; // identificador do pedido
	private String name; // nome do pedido
	private String description; // observações feitas pelo usario a respeito do pedido
	private int num; // quantidade de itens
	private User user; // usuario que registrou o pedido
	private String status = "recebido"; // status do pedido
	
	public String getDescription() {
		return description;
	}
	public void setDescription(String description) {
		this.description = description;
	}
	public int getNum() {
		return num;
	}
	public void setNum(int num) {
		this.num = num;
	}
	public User getUser() {
		return user;
	}
	public void setUser(User user) {
		this.user = user;
	}
	
	public String getStatus() {
		return status;
	}
	public void setStatus(String status) {
		this.status = status;
	}
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	
	
}
