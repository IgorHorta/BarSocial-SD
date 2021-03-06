package bean;

import java.io.Serializable;

public class JsonResponseBean<T> implements Serializable {
	
	private static final long serialVersionUID = 1L;

	/** Status da requisição (obrigatorio) */
	private boolean status;
	/** Qual erro ocorreu? (opcional) */
	private String error;
	/** Mensagem informativa (opcional). */
	private String message;
	/** Dados de retorno da requisição (opcional). */
	private T data;
	
	public JsonResponseBean(boolean status) {
		this.status = status;
	}

	public JsonResponseBean(boolean status, String message) {
		this.status = status;
		this.message = message;
	}

	public JsonResponseBean(boolean status, String error, String message) {
		this.status = status;
		this.error = error;
		this.message = message;
	}

	public JsonResponseBean(boolean status, T data) {
		this.status = status;
		this.data = data;
	}

	/** Assume status = true. */
	public JsonResponseBean(T data) {
		this.status = true;
		this.data = data;
	}

	public JsonResponseBean(boolean status, String message, T data) {
		this.status = status;
		this.message = message;
		this.data = data;
	}
	
	// Getters e Setters de todos os campos.
	
	public boolean isStatus() {
		return status;
	}
	public void setStatus(boolean status) {
		this.status = status;
	}
	public String getError() {
		return error;
	}
	public void setError(String error) {
		this.error = error;
	}
	public String getMessage() {
		return message;
	}
	public void setMessage(String message) {
		this.message = message;
	}
	public T getData() {
		return data;
	}
	public void setData(T data) {
		this.data = data;
	}
}
