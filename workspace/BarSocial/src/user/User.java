package user;


public class User {
	
	private int id; // identificador de um usuario	
	private String name; // nome do usuario
	private String password; // senha do usuario
	private int accessLvl = 1; // nivel de acesso
	
	
	public String getName() {
		return name;
	}
	public void setName(String name) {
		this.name = name;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	public int getAccessLvl() {
		return accessLvl;
	}
	public void setAccessLvl(int accessLvl) {
		this.accessLvl = accessLvl;
	}
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	
}
